<?php
$query = "SELECT * from transactions ORDER BY transactionID ASC";
$query = mysqli_query($connection, $query);

if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_array($query)) {
        echo "
        <tr>
            <td>
            <form action='../controllers/general.php' method='post'>
                <input type='number' name='transactionID' value='".$row['transactionID']."' readonly hidden />
                <button class='actionBtn' type='submit' name='request_idButton'> View </button>
            </form>
            </td>
            <td></td>
            <td>".$row['timestamp']."</td>
            <td></td>
            <td>$".$row['amount']."</td>
            <td></td>
            <td>".$row['status']."</td>
            <td></td>";

            switch (strtolower($row['method'])) {
                case 'mastercard':
                    echo "<td><img src='includes\assets\media\images\mastercard.png' alt=''></td>";
                    break;

                case 'amex':
                    echo "<td><img src='includes\assets\media\images\amex.png' alt=''></td>";
                    break;
                    
                case 'paypal':
                    echo "<td><img src='includes\assets\media\images\paypal.png' alt=''></td>";
                    break;
                
                case 'visa':
                    echo "<td><img src='includes\assets\media\images\visa.png' alt=''></td>";
                    break;

                case 'discover':
                    echo "<td><img src='includes\assets\media\images\discover.png' alt=''></td>";
                    break;

                default:
                    echo "<td>Not Indicated</td>";
                    break;
            }
        echo "</tr>";
    }
} else {
    echo "
        <tr>
            <td colspan='10'>No transactions found...</td>  
        </tr>
    ";
    include 'includes\assets\html\forms\getAPI_Data.html';
}


echo "
            </tbody>
        </table>
    </div>";
?>