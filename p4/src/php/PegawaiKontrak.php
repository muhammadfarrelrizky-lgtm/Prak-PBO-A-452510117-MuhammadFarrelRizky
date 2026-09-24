<?php
declare(strict_types=1);

require_once __DIR__ . '/Pegawai.php';

class PegawaiKontrak extends Pegawai
{
	public function __construct(
		string $nip, string $nama, float $gajiPokok,
		private readonly int $bulanKontrak,
	) {
		parent::__construct($nip, $nama, $gajiPokok);
	}

	public function jenis(): string { return 'KONTRAK'; }

	public function getBulanKontrak(): int { return $this->bulanKontrak; }
}
