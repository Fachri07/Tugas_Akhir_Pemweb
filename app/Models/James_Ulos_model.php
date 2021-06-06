<?php namespace App\Models;

use CodeIgniter\Model;

class James_Ulos_model extends Model
{
    protected $table = 'pemesanan';
    protected $primaryKey = 'id_pemesanan'; 
    protected $allowedFields = ['nama_pembeli', 'alamat', 'email', 'no_hp','jumlah_pesanan', 'kode_pos', 'keterangan'];

    public function getOrder($id = false){
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id_pemesanan' => $id]);
        }
    }
    public function editOrder($data,$id){
        $builder = $this->db->table($this->table);
        $builder->where('id_pemesanan', $id);
        return $builder->update($data);
    }
    public function deleteOrder($id){
        $builder = $this->db->table($this->table);
        return $builder->delete(['id_pemesanan' => $id]);
    }
}

 // class James_Ulos_model extends CI_Model {

//     public function get_orders() {
//         $this->load->database();

//         $query = $this->db->query('SELECT * FROM pemesanan');
    
//         return $query->result();
//     }

//     public function insert($nama, $alamat, $email, $no_hp, $jumlah_pesanan, $kode_pos, $keterangan){
//             $this->load->database();
//             $this->db->query("INSERT INTO pembeli (nama, alamat, email, no_hp) VALUES ('$nama', '$alamat', '$email', '$no_hp')");
//             $this->db->query("INSERT INTO pemesanan (jumlah_pesanan, kode_pos, keterangan) VALUES ('$jumlah_pesanan', '$kode_pos', '$keterangan')");
//     }
// }