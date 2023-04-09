<?
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Handphone extends Model
{
    use HasFactory;

    protected $table = 'snack';

    protected $fillabel = ['nama','deskripsi','harga'];
}