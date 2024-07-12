<?php
class PembayaranModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database(); // Memuat database di konstruktor model
    }

    public function get_pembayaran_tiket()
    {
        $query = $this->db->get('pembayaran_tiket');
        return $query->result_array();
    }

    public function get_pembayaran_tiket_by_id($id)
    {
        $query = $this->db->get_where('pembayaran_tiket', array('id' => $id));
        return $query->row_array();
    }

    public function create_pembayaran_tiket($data)
    {
        return $this->db->insert('pembayaran_tiket', $data);
    }

    public function update_pembayaran_tiket($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('pembayaran_tiket', $data);
    }

    public function delete_pembayaran_tiket($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('pembayaran_tiket');
    }

    public function cari_pembayaran_tiket($keyword)
    {
        $this->db->like('metode_pembayaran', $keyword); // Sesuaikan dengan kolom yang ingin dicari
        $query = $this->db->get('pembayaran_tiket');
        return $query->result_array(); // Mengembalikan array asosiatif
    }
}
