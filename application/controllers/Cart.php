<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_produk');
        $this->load->model('m_cart');
        $this->load->library('cart');
    }

    function getProduk($id_produk)
    {
        if (isset($id_produk)) {
            $data = $this->m_produk->add_to_cart($id_produk);
            return $data;
        } else {
            $this->session->set_flashdata('errAddCart', 'Tidak bisa menambahkan produk');
            redirect("");
        }
    }

    function add_to_cart()
    {
        $data = array(
            'id' => $this->input->post('product_id'),
            'name' => $this->input->post('product_name'),
            'price' => $this->input->post('product_price'),
            'qty' => $this->input->post('quantity'),
            'image' => $this->input->post("image"),
            'ukuran' => $this->input->post("ukuran"),
            'model' => $this->input->post("model"),
            'bahan' => $this->input->post('bahan')
        );
        $this->cart->insert($data);
        echo $this->show_cart();
    }

    function update_cart()
    {
        $data = array(
            'rowid' => $this->input->post('row_id'),
            'qty' => $this->input->post('qty'),
        );
        $this->cart->update($data);
        echo $this->show_cart();
    }

    function show_cart()
    { //Fungsi untuk menampilkan Cart
        $output = '';
        $no = 0;
        foreach ($this->cart->contents() as $items) {
            $no++;
            $output .= '
                <tr id="data_table_tr">
                    <td id="data_table_product_name" data-productname="' . $items["name"] . '">' . $items['name'] . '</td>
                    <td id="data_table_product_price" data-productprice="' . number_format($items["price"]) . '">' . number_format($items['price']) . '</td>
                    <td id="data_table_product_qty" data-productqty="' . $items["qty"] . '"><input type="number" data-rowid="' . $items['rowid'] . '" class="form-control product_qty" value="' . $items["qty"] . '"></td>
                    <td id="data_table_product_subtotal" data-productsubtotal="' . number_format($items["subtotal"]) . '">' . number_format($items['subtotal']) . '</td>
                    <td><button type="button" id="' . $items['rowid'] . '" class="hapus_cart btn btn-danger btn-xs w-100">Batal</button></td>
                    <td colspan="0" id="data_table_text_product" data-textProduct="' . $items["name"] . '" data-banyakproduk="' . $items["qty"] . '" data-hargaproduk="' . $items["qty"] * $items["price"] . '" data-hargaperitem="' . $items["price"] . '" data-image="' . $items["image"] . '" data-ukuran="' . $items["ukuran"] . '" data-model="' . $items["model"] . '" data-bahan="' . $items["bahan"] . '" data-id_produk="' . $items["id"] . '"></td>
                </tr>
            ';
        }
        $output .= '
            <tr>
                <th colspan="3">Provinsi</th>
                <th colspan="3" id="provinsi"></th>
            </tr>
            <tr>
                <th colspan="3">Kota</th>
                <th colspan="3" id="kota"></th>
            </tr>
            <tr>
                <th colspan="3">Ekspedisi</th>
                <th colspan="3" id="ekspedisi"></th>
            </tr>
            <tr>
                <th colspan="3">Ongkir</th>
                <th colspan="3" id="ongkir"></th>
            </tr>
            <tr>
                <th colspan="3">Subtotal</th>
                <th colspan="3" id="data_table_product_subtotal" data-productsubtotal="' . $this->cart->total() . '">' . 'Rp ' . number_format($this->cart->total()) . '</th>
            </tr>
            <tr>
                <th colspan="3">Total biaya</th>
                <th colspan="3" id="data_table_product_total" data-producttotal="' . $this->cart->total() . '">' . 'Rp ' . number_format($this->cart->total()) . '</th>
            </tr>
        ';
        return $output;
    }

    function load_cart()
    { //load data cart
        echo $this->show_cart();
    }

    function delete_cart()
    { //fungsi untuk menghapus item cart
        $data = array(
            'rowid' => $this->input->post('row_id'),
            'qty' => 0,
        );
        $this->cart->update($data);
        echo $this->show_cart();
    }

    function checkout()
    {
        $uuid = $this->input->post("uuid");
        // $id_barang = $this->input->post("id_barang");
        $nama = $this->input->post("nama");
        $no_telp = $this->input->post("no_telp");
        $alamat = $this->input->post("alamat");
        $gambar = $_FILES["gambarPembayaran"];
        $data = $this->input->post("data");

        if ($no_telp == "" || $no_telp == "...") {
            $no_telp = $this->session->userdata('user_logged')['no_hp'];
        }

        if ($nama == "" || $nama == "...") {
            $nama = $this->session->userdata('user_logged')['nama_lengkap'];
        }

        if ($alamat == "" || $alamat == "...") {
            $data = [
                'code' => 500,
                'message' => "alert('Alamat harus di isi')"
            ];
            echo json_encode($data);
            return false;
        }

        if ($gambar == "" || $gambar == "...") {
            $data = [
                'code' => 500,
                'message' => "alert('Harap isi bukti pembayaran')",
                "alertt" => $gambar
            ];
            echo json_encode($data);
            return false;
        }

        $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
        $nama = $_FILES['gambarPembayaran']['name'];
        $x = explode('.', $nama);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['gambarPembayaran']['size'];
        $file_tmp = $_FILES['gambarPembayaran']['tmp_name'];
        $randName = rand() . $nama;

        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            if ($ukuran < 5004898) {
                move_uploaded_file($file_tmp, "./assets/uploads/buktiTF/" . $randName);
                $this->m_cart->checkout($uuid, $nama, $data, $alamat, $no_telp, $randName);
                $this->cart->destroy();
            } else {
                echo 'UKURAN FILE TERLALU BESAR';
            }
        } else {
            echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
        }
    }
}

/* End of file Cart.php */
/* Location: ./application/controllers/Cart.php */