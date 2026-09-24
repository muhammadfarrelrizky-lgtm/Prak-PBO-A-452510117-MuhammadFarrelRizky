<?php
declare(strict_types=1);

require_once __DIR__ . '/Pegawai.php';

class PegawaiTetap extends Pegawai
{
	protected const TUNJANGAN_PER_TAHUN = 0.02;
	protected const TUNJANGAN_MAKSIMUM = 0.40;

	public function __construct(
		string $nip, string $nama, float $gajiPokok,
		protected readonly int $masaKerjaTahun,
	) {
		parent::__construct($nip, $nama, $gajiPokok);
	}

	public function hitungGaji(): float
	{
		$persentaseTunjangan = min(
			$this->masaKerjaTahun * self::TUNJANGAN_PER_TAHUN,
			self::TUNJANGAN_MAKSIMUM,
		);

		return parent::hitungGaji() + ($persentaseTunjangan * $this->gajiPokok);
	}

	public function jenis(): string { return 'TETAP'; }
}
