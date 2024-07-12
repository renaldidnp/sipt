<?php
class PemesananModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database(); // Memuat database di konstruktor model
    }

    public function get_pemesanan_tiket()
    {
        $query = $this->db->get('pemesanan_tiket');
        return $query->result_array();
    }

    public function get_pemesanan_tiket_by_id($id)
    {
        $query = $this->db->get_where('pemesanan_tiket', array('id' => $id));
        return $query->row_array();
    }

    public function create_pemesanan_tiket($data)
    {
        return $this->db->insert('pemesanan_tiket', $data);
    }

    public function update_pemesanan_tiket($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('pemesanan_tiket', $data);
    }

    public function delete_pemesanan_tiket($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('pemesanan_tiket');
    }

    public function cari_pemesanan_tiket($keyword)
    {
        $this->db->like('nama', $keyword); // Sesuaikan dengan kolom yang ingin dicari
        $query = $this->db->get('pemesanan_tiket');
        return $query->result_array(); // Mengembalikan array asosiatif
    }
}
