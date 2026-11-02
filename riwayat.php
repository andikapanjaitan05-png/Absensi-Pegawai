<h2>Riwayat Absensi</h2>
<table>
  <tr>
    <th>No</th><th>Nama</th><th>Tanggal</th><th>Waktu Masuk</th><th>Jarak (m)</th><th>Status</th>
  </tr>
  <?php foreach ($riwayat as $i => $r): ?>
  <tr>
    <td><?= $i + 1 ?></td>
    <td><?= e($r['nama']) ?></td>
    <td><?= e($r['tanggal']) ?></td>
    <td><?= e($r['waktu_masuk']) ?></td>
    <td><?= e($r['jarak_meter']) ?></td>
    <td class="<?= $r['status'] === 'Terlambat' ? 'telat' : 'tepat' ?>"><?= e($r['status']) ?></td>
  </tr>
  <?php endforeach; ?>
</table>