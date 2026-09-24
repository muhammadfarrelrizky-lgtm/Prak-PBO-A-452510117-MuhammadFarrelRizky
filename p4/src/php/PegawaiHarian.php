<?php
declare(strict_types=1);

require_once __DIR__ . '/Pegawai.php';

class PegawaiHarian extends Pegawai
{
    public function __construct(
        string $nip, string $nama, float $gajiPokok,
        private readonly int $jumlahJamKerja,
    ) {
        parent::__construct($nip, $nama, $gajiPokok);
        if ($jumlahJamKerja < 0) {
            throw new InvalidArgumentException('Jumlah jam kerja tidak boleh negatif');
        }
    }

    public function hitungGaji(): float
    {
        return parent::hitungGaji() + ($this->jumlahJamKerja * 10_000);
    }

    public function jenis(): string { return 'HARIAN'; }
}
