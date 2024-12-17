$(document).ready(function()
{
    //menambahkan baris baru ke tabel
    $('#addRow').click(function(){
const newRom=<tr>
    <td>No</td>
    <td>Nama Baru</td>
    <td>email@baru.com</td>
    <td><button class="edit">Edit</button><button class="delete">Hapus</button></td>
</tr>
$('#alumniTable tbody').append(newRow);
    });

    //mengedit baris yang ada
    $('#alumniTable').on('click','edit', function(){
        const row=$ (this).closest('tr');
        const no=row.find('td').eq(0).text();
        const name=row.find('td').eq(1).text();
        const email=row.find('td').eq(2).text();

        //tampilkan prompt untuk mengedit
        const newNomor=prompt('Edit Nomor:', no);
        const newName=prompt('Edit Nama:', name);
        const newEmail=prompt('Edit Email:', email);

        if(newNomor !==null && newName !==null && newEmail!==null){
            row.find('td').eq(0).text(newNomor);
            row.find('td').eq(1).text(newName);
            row.find('td').eq(2).text(newEail);
        }
    });

    //menghapus baris dari tabel
    $('aalumniTable').on('click', 'delete', function(){
        if (confirm('Apakah Anda Yakin ingin menghapus baris ini?')){
            $(this).closet('tr').remove();
        }
    });
});