public class PegawaiHarian extends Pegawai {

    private final int jumlahJamKerja;

    public PegawaiHarian(String nip, String nama, double gajiPokok, int jumlahJamKerja) {
        super(nip, nama, gajiPokok);
        if (jumlahJamKerja < 0) {
            throw new IllegalArgumentException("Jumlah jam kerja tidak boleh negatif");
        }
        this.jumlahJamKerja = jumlahJamKerja;
    }

    @Override
    public double hitungGaji() {
        double tunjanganHarian = jumlahJamKerja * 10_000;
        return super.hitungGaji() + tunjanganHarian;
    }

    @Override
    public String jenis() { return "HARIAN"; }
}
