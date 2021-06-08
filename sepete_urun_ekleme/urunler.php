<?php
if ($_GET) {
    session_start();

    $urun = array(
        "urun_adi" => $_GET["urun"],
        "urun_adet" => $_GET["adet"],
        "urun_fiyat" => $_GET["fiyat"],
    );
    // print_r($urun);
    // $_SESSION["urunListesi"][] = $urun;//Bu sekilde olursa ayni urunu tekrar dizinin sonuna ekler
    $_SESSION["urunListesi"][$_GET["urun"]] = $urun;//Bu sekilde olursa mevcut dizini bulur ve icerigini degistirir

    // session_unset();
}
?>

<form action="urunler.php" method="get">
    <fieldset>
        <label for="urunler">Urun Listesi</label>
        <select name="urun" id="urunler">
            <option value="monitor">monitor</option>
            <option value="laptop">laptop</option>
            <option value="macbook">macbook</option>
            <option value="mouse">mouse</option>
        </select>
        <input type="text" name="adet" value="1">
        <input type="text" name="fiyat" value="1500">
        <button type="submit">Sepete ekle</button>
    </fieldset>

</form>