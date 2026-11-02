<div class="box">
  <h2>Absensi Pegawai</h2>

  <?php if ($kantor): ?>
    <div class="lokasi">
      Lokasi: <?= e($kantor['nama_kantor']) ?> (radius <?= (int)$kantor['radius_meter'] ?> m)
    </div>
  <?php endif; ?>

  <label for="pegawai">Pilih pegawai:</label>
  <select id="pegawai">
    <?php foreach ($pegawai as $p): ?>
      <option value="<?= (int)$p['id'] ?>">
        <?= e($p['nama']) ?> (Shift <?= e($p['nama_shift']) ?> - <?= e(substr($p['jam_masuk'], 0, 5)) ?>)
      </option>
    <?php endforeach; ?>
  </select>

  <button id="btnAbsen" type="button" data-url="<?= e(url('absen-proses')) ?>">Absen Masuk Sekarang</button>

  <?php require BASE_PATH . '/views/components/result-box.php'; ?>

  <p><a href="<?= e(url('riwayat')) ?>">Lihat riwayat absensi</a></p>
</div>