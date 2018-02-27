<table>

<?php
const SiZE_ROWS = 10;
const SIZE_COLUMNS = 10;

for ($row=1; $row <= SiZE_ROWS; $row++)
{
?>
    <tr>
    <?php
    for ($col=1; $col <= SIZE_COLUMNS; $col++)
    {
        //echo $row * $col." ";
        ?>
        <td>
    <?php
        $num = $row * $col;
        $remainder = $num % 2;
        if ($remainder == 0)
        {
            echo "(".$num.")";
        }
        elseif ($remainder > 0)
        {
            echo "[".$num."]";
        }
        else
        {
            echo $num;
        }
    ?>
        </td>
        <?php
    }
    ?>
    </tr>
    <?php
}
?>

</table>
