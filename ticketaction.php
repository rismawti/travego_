<?php
include "config.php";
include "bot.php";
if(isset($_POST['addticket'])){
    $id_ticket = $_POST['id_ticket'];
    $username = $_POST['username'];
    $name = $_POST['name'];
    $harga = $_POST['harga'];
    $kelas_penerbangan = ($_POST['kelas_penerbangan']);
    $no_tlp = ($_POST['no_tlp']);
    $status_pembayaran = $_POST['status_pembayaran'];
    $tangal_pergi = $_POST['tangal_pergi'];
    $pasenger = $_POST['pasenger'];
    $dari = $_POST['dari'];
    $menuju = $_POST['menuju'];
    
    $data = $konek->query("INSERT INTO ticket(id_ticket, username, name, harga, kelas_penerbangan, no_tlp, status_pembayaran, tanggal_pergi, pasenger, dari, menuju) 
    VALUES('$_POST[id_ticket]','$_POST[username]', '$_POST[name]','$_POST[harga]', '$_POST[kelas_penerbangan]', '$_POST[no_tlp]', '$_POST[status_pembayaran]', '$_POST[tanggal_pergi]','$_POST[pasenger]','$_POST[dari]','$_POST[menuju]')");
    if($data){
        header('location:ticket.php');
    }else{
        header('location:ticketaction.php?pesan=gagal');
    }
    
}

?>
<div class="konten p-5" style="background-color: black;">
<div class="row mx-auto" style="width: 800px;">
  <div class="col-4 text-dark bg-light ">
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi, reprehenderit. Tempora, amet dolore obcaecati dolorem, et fuga aut non ut nobis minus neque libero cum maxime repellat, ipsum quasi incidunt.
  </div>
  <div class="col-8">
  <form action="" method="post" style="background-color: salmon; padding: 50px;">
  <div class="form-group">
    <label for="exampleInputEmail1">id_ticket</label>
    <input type="id_ticket" name="id_ticket" class="form-control" id="id_ticket" aria-describedby="emailHelp"
    placeholder="....">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">harga</label>
    <input type="harga" class="form-control" name="harga" id="harga" placeholder="...">
  </div>
        <option selected>kelas penerbangan</option>
    <select class="form-select" name="kelas_penerbangan" aria-label="Default select example">
        <option value="economy">economy</option>
        <option value="premium economy">premium economy</option>
        <option value="vip">vip</option>
        <option value="vvip">vvip</option>
    </select>
    <option selected>tanggal pergi</option>
    <input type="date" name="tanggal_pergi">
    <div class="row">
        <div class="col">
        <h3>Dari<img src="icons8-airplane-take-off-30.png" width="30" alt=""> </h3>
        <div class="mb-3" style="width: 150px;">
            <select class="form-select" aria-label="Default select example" name="dari">
                <option value="jakarta">jakarta</option>
                <option value="bandung">bandung</option>
                <option value="aceh">aceh</option>
            </select>
        </div>
        </div>
        <div class="col">
        <h3>Menuju <img src="icons8-airplane-landing-30.png" width="30" alt=""></h3>
             <div class="mb-3" style="width: 150px;">
                <select class="form-select" aria-label="Default select example" name="menuju">
                    <option value="bali">bali</option>
                    <option value="buol">buol</option>
                    <option value="sulut">sulut</option>
                    <option value="kalut">kalut</option>
                    <option value="jepang">jepang</option>
                    <option value="australia">australia</option>
                    <option value="new zealand">new zealand</option>
                </select>
            </div>
        </div>
    </div>
  <br>
  <button type="submit" name="addticket" class="btn btn-primary">add ticket</button><br>
