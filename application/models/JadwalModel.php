<?php
class JadwalModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database(); // Memuat database di konstruktor model
    }

    public function get_jadwal_acara()
    {
        $query = $this->db->get('jadwal_acara');
        return $query->result_array();
    }

    public function get_jadwal_acara_by_id($id)
    {
        $query = $this->db->get_where('jadwal_acara', array('id' => $id));
        return $query->row_array();
    }

    public function create_jadwal_acara($data)
    {
        return $this->db->insert('jadwal_acara', $data);
    }

    public function update_jadwal_acara($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('jadwal_acara', $data);
    }

    public function delete_jadwal_acara($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('jadwal_acara');
    }

    public function cari_jadwal_acara($keyword)
    {
        $this->db->like('metode_pembayaran', $keyword); // Sesuaikan dengan kolom yang ingin dicari
        $query = $this->db->get('jadwal_acara');
        return $query->result_array(); // Mengembalikan array asosiatif
    }
}
