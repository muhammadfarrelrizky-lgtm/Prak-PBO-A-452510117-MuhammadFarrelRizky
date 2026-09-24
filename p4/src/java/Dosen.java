public class Dosen extends PegawaiTetap {
    private final double tunjanganFungsional;

    public Dosen(String nip, String nama, double gajiPokok, int masaKerja, double tunjanganFungsional) {
        super(nip, nama, gajiPokok, masaKerja);
        if (tunjanganFungsional < 0) {
            throw new IllegalArgumentException("Tunjangan fungsional tidak boleh negatif");
        }
        this.tunjanganFungsional = tunjanganFungsional;
    }
    @Override
    public double hitungGaji() {
        double gajiDasar = super.hitungGaji();
        return gajiDasar + tunjanganFungsional;
    }
    @Override
    public String jenis() {
        return "DOSEN";
    }
}