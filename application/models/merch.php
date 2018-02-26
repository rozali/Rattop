<?php

class merch extends CI_Model {

        public function viewhome() {
        $query = $this->db->query("select * from home")->result();
        return $query;
        }

        public function viewtshirt() {
	    $query = $this->db->query("select * from tshirt")->result();
        return $query;
	}

        public function viewhelm() {
        $query = $this->db->query("select * from helm")->result();
        return $query;
        }

        public function viewvest() {
        $query = $this->db->query("select * from vest")->result();
        return $query;        
        }

        public function viewworkshirt() {
        $query = $this->db->query("select * from workshirt")->result();
        return $query;
        }

        public function viewpants() {
        $query = $this->db->query("select * from pants")->result();
        return $query;
        }

        public function viewcaps() {
        $query = $this->db->query("select * from caps")->result();
        return $query;
        }

        public function viewmotorcycle() {
        $query = $this->db->query("select * from motorcycle")->result();
        return $query;
        }
        public function detail() {
                $id = $this->input->post('id');
                $type = $this->input->post('type');
                if ($type=="tshirt"){
                        $query = $this->db->query("select * from tshirt where idtshirt='$id'")->result();
                } elseif ($type=="vest") {
                        $query = $this->db->query("select * from vest where idvest='$id'")->result();
                } elseif ($type=="workshirt") {
                        $query = $this->db->query("select * from workshirt where idworkshirt='$id'")->result();
                } elseif ($type=="pants") {
                        $query = $this->db->query("select * from pants where idpants='$id'")->result();
                } elseif ($type=="caps") {
                        $query = $this->db->query("select * from caps where idcaps='$id'")->result();
                } elseif ($type=="helm") {
                        $query = $this->db->query("select * from helm where idhelm='$id'")->result();
                } elseif ($type=="motorcycle") {
                        $query = $this->db->query("select * from motorcycle where idmotorcycle='$id'")->result();
                }
                return $query;
        }
        // public function viewadmin() {
        // $query = $this->db->query("select * from motorcycle")->result();
        // return $query;
        // }

        public function addmerch(){
                $merch = $this->input->post('merch');
                $namamerch = $this->input->post('nama');
                $model = $this->input->post('model');
                $warna = $this->input->post('warna');
                $bahan = $this->input->post('bahan');
                $harga = $this->input->post('harga');

                if ($merch == "tshirt" && $this->upload->do_upload('gambar')){
                        $up_data = $this->upload->data();
                        $query = $this->db->query("insert into tshirt (nama,gambar,model,warna,bahan,harga) values ('$namamerch','".$up_data['file_name']."','$model','$warna','$bahan','$harga') ");
                } elseif ($merch == "workshirt" && $this->upload->do_upload('gambar')){
                        $up_data = $this->upload->data();
                        $query = $this->db->query("insert into workshirt (nama,gambar,model,warna,bahan,harga) values ('$namamerch','".$up_data['file_name']."','$model','$warna','$bahan','$harga') ");
                } elseif ($merch == "vest" && $this->upload->do_upload('gambar')){
                        $up_data = $this->upload->data();
                        $query = $this->db->query("insert into vest (nama,gambar,model,warna,bahan,harga) values ('$namamerch','".$up_data['file_name']."','$model','$warna','$bahan','$harga') ");
                } elseif ($merch == "pants" && $this->upload->do_upload('gambar')){
                        $up_data = $this->upload->data();
                        $query = $this->db->query("insert into pants (nama,gambar,model,warna,bahan,harga) values ('$namamerch','".$up_data['file_name']."','$model','$warna','$bahan','$harga') ");
                }
        }
        public function addacc(){
                $acc = $this->input->post('acc');
                $namaacc = $this->input->post('nama');
                $model = $this->input->post('model');
                $warna = $this->input->post('warna');
                $harga = $this->input->post('harga');

                if ($acc == "helm" && $this->upload->do_upload('gambar')){
                        $up_data = $this->upload->data();
                        $query = $this->db->query("insert into helm (nama,gambar,model,warna,harga) values ('$namaacc','".$up_data['file_name']."','$model','$warna','$harga') ");
                } elseif ($acc == "caps" && $this->upload->do_upload('gambar')){
                        $up_data = $this->upload->data();
                        $query = $this->db->query("insert into caps (nama,gambar,model,warna,harga) values ('$namaacc','".$up_data['file_name']."','$model','$warna','$harga') ");
                }
        }
        public function addmotorcycle(){
                $namamtrc = $this->input->post('nama');
                $this->upload->do_upload('gambar');
                $up_data = $this->upload->data();
                $query = $this->db->query("insert into motorcycle (nama,gambar) values ('$namamtrc','".$up_data['file_name']."') ");
        }
        public function updatetshirt(){
                $id = $this->input->post('id');
                $merch = $this->input->post('merch');
                $namamerch = $this->input->post('nama');
                $model = $this->input->post('model');
                $warna = $this->input->post('warna');
                $bahan = $this->input->post('bahan');
                $harga = $this->input->post('harga');

                if($this->upload->do_upload('gambar')){
                        $up_data = $this->upload->data();
                        $query = $this->db->query("update tshirt set nama='$namamerch', gambar='".$up_data['file_name']."', model='$model', warna='$warna', bahan='$bahan', harga='$harga' where idtshirt='$id' ");
                } else {
                        $query = $this->db->query("update tshirt set nama='$namamerch', model='$model', warna='$warna', bahan='$bahan', harga='$harga' where idtshirt='$id' ");
                }
        }
        public function updateworkshirt(){
                $id = $this->input->post('id');
                $namamerch = $this->input->post('nama');
                $model = $this->input->post('model');
                $warna = $this->input->post('warna');
                $bahan = $this->input->post('bahan');
                $harga = $this->input->post('harga');

                if($this->upload->do_upload('gambar')){
                        $up_data = $this->upload->data();
                        $query = $this->db->query("update workshirt set nama='$namamerch', gambar='".$up_data['file_name']."', model='$model', warna='$warna', bahan='$bahan', harga='$harga' where idworkshirt='$id' ");
                } else {
                        $query = $this->db->query("update workshirt set nama='$namamerch', model='$model', warna='$warna', bahan='$bahan', harga='$harga' where idworkshirt='$id' ");
                }
        }
        public function updatevest(){
                $id = $this->input->post('id');
                $namamerch = $this->input->post('nama');
                $model = $this->input->post('model');
                $warna = $this->input->post('warna');
                $bahan = $this->input->post('bahan');
                $harga = $this->input->post('harga');

                if($this->upload->do_upload('gambar')){
                        $up_data = $this->upload->data();
                        $query = $this->db->query("update vest set nama='$namamerch', gambar='".$up_data['file_name']."', model='$model', warna='$warna', bahan='$bahan', harga='$harga' where idvest='$id' ");
                } else {
                        $query = $this->db->query("update vest set nama='$namamerch', model='$model', warna='$warna', bahan='$bahan', harga='$harga' where idvest='$id' ");
                }
        }
        public function updatepants(){
                $id = $this->input->post('id');
                $namamerch = $this->input->post('nama');
                $model = $this->input->post('model');
                $warna = $this->input->post('warna');
                $bahan = $this->input->post('bahan');
                $harga = $this->input->post('harga');

                if($this->upload->do_upload('gambar')){
                        $up_data = $this->upload->data();
                        $query = $this->db->query('update pants set nama="$namamerch", gambar="'.$up_data["file_name"].'", model="$model", warna="$warna", bahan="$bahan", harga="$harga" where idpants="$id"');
                } else {
                        $query = $this->db->query('update pants set nama="$namamerch", model="$model", warna="$warna", bahan="$bahan", harga="$harga" where idpants="$id" ');
                }
        }
        public function updatecaps(){
                $id = $this->input->post('id');
                $namaacc = $this->input->post('nama');
                $model = $this->input->post('model');
                $warna = $this->input->post('warna');
                $harga = $this->input->post('harga');

                if($this->upload->do_upload('gambar')){
                        $up_data = $this->upload->data();
                        $query = $this->db->query('update caps set nama="$namaacc", gambar="'.$up_data["file_name"].'", model="$model", warna="$warna", harga="$harga" where idcaps="$id"');
                } else {
                        $query = $this->db->query('update caps set nama="$namaacc", model="$model", warna="$warna", harga="$harga" where idcaps="$id" ');
                }
        }
        public function updatehelm(){
                $id = $this->input->post('id');
                $namaacc = $this->input->post('nama');
                $model = $this->input->post('model');
                $warna = $this->input->post('warna');
                $bahan = $this->input->post('bahan');
                $harga = $this->input->post('harga');

                if($this->upload->do_upload('gambar')){
                        $up_data = $this->upload->data();
                        $query = $this->db->query('update helm set nama="$namaacc", gambar="'.$up_data["file_name"].'", model="$model", warna="$warna", harga="$harga" where idhelm="$id"');
                } else {
                        $query = $this->db->query('update helm set nama="$namaacc", model="$model", warna="$warna", harga="$harga" where idhelm="$id" ');
                }
        }
        public function updatemotorcycle(){
                $id = $this->input->post('id');
                $namamtrc = $this->input->post('nama');

                if($this->upload->do_upload('gambar')){
                        $up_data = $this->upload->data();
                        $query = $this->db->query('update motorcycle set nama="$namamtrc", gambar="'.$up_data["file_name"].'" where idmotorcycle="$id"');
                } else {
                        $query = $this->db->query('update motorcycle set nama="$namamtrc", where idmotorcycle="$id" ');
                }
        }
        public function utshirt() {
        $id = $this->input->post('id');
        $query = $this->db->query("select * from tshirt where idtshirt = '$id'")->result();
        return $query;
        }
        public function uworkshirt() {
        $id = $this->input->post('id');
        $query = $this->db->query("select * from workshirt where idworkshirt = '$id'")->result();
        return $query;
        }
        public function uvest() {
        $id = $this->input->post('id');
        $query = $this->db->query("select * from vest where idvest = '$id'")->result();
        return $query;
        }
        public function upants() {
        $id = $this->input->post('id');
        $query = $this->db->query("select * from pants where idpants = '$id'")->result();
        return $query;
        }
        public function ucaps() {
        $id = $this->input->post('id');
        $query = $this->db->query("select * from caps where idcaps = '$id'")->result();
        return $query;
        }
        public function uhelm() {
        $id = $this->input->post('id');
        $query = $this->db->query("select * from helm where idhelm = '$id'")->result();
        return $query;
        }
        public function umotorcycle() {
        $id = $this->input->post('id');
        $query = $this->db->query("select * from motorcycle where idmotorcycle = '$id'")->result();
        return $query;
        }
        public function deletetshirt() {
        $iddelete = $this->input->post('delete');
        $this->db->query("delete from tshirt where idtshirt = '$iddelete'");
        }
        public function deleteworkshirt() {
        $iddelete = $this->input->post('delete');
        $this->db->query("delete from workshirt where idworkshirt = '$iddelete'");
        }
        public function deletevest() {
        $iddelete = $this->input->post('delete');
        $this->db->query("delete from vest where idvest = '$iddelete'");
        }
        public function deletepants() {
        $iddelete = $this->input->post('delete');
        $this->db->query("delete from pants where idpants = '$iddelete'");
        }
        public function deletecaps() {
        $iddelete = $this->input->post('delete');
        $this->db->query("delete from caps where idcaps = '$iddelete'");
        }
        public function deletehelm() {
        $iddelete = $this->input->post('delete');
        $this->db->query("delete from helm where idhelm = '$iddelete'");
        }
        public function deletemotorcycle() {
        $iddelete = $this->input->post('delete');
        $this->db->query("delete from motorcycle where idmotorcycle = '$iddelete'");
        }

        public function do_login() {
                $username       = $this->security->xss_clean($this->input->post('username'));
                $password       = $this->security->xss_clean($this->input->post('password'));
                $q_cek          = $this->db->query("SELECT * FROM admin WHERE username = '$username' AND password = '$password'");
                $j_cek          = $q_cek->num_rows();
                $d_cek          = $q_cek->row();
                
        if($j_cek == 1) {
            $data = array(
                'admin_id' => $d_cek->idadmin,
                'admin_user' => $d_cek->username,
                'admin_level' => $d_cek->level,
                'admin_valid' => true
                    );
            $this->session->set_userdata($data);
        }
        }
        public function logout(){
                $this->session->sess_destroy();
                redirect('index.php/admin/login');
        }
        public function updatepassword(){
                $id = $this->session->userdata('admin_id');
                $username = $this->input->post('username');
                $oldpas = $this->input->post('oldpassword');
                $newpas = md5($this->input->post('newpassword'));
                $q_cek = $this->db->query("SELECT idadmin FROM admin idadmin='$id'")->row();
                if ('$id'=='$q_cek'){
                $query = $this->db->query('update admin set username="$username", password="$newpas" where idadmin="$id"');
        }
        }
}
?>