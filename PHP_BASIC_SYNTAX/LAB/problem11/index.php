<?php session_start(); ?>

<form method="get">
    <div>
        Delimeter:
        <select name="delimeter" >
            <option value=",">,</option>
            <option value="|">|</option>
            <option value="&">&</option>
        </select>
    </div>
    <div>
        Names
        <input type="text" name="names">
    </div>
    <div>  
        Ages
        <input type="text" name="ages">
    </div>

    <div>
        <input type="submit" name="filter" value="Filter">
    </div>
</form>


<?php 
if(isset($_SESSION['names'])){
    $names = $_SESSION['names'];
    $ages = $_SESSION['names'];
    $pages = ceil(count($_SESSION['names']) / 5) ;
    

    $new_names = array_chunk($names,5);
    $new_ages = array_chunk($ages,5);

    if(!isset($_GET['page'])){
        $names = $new_names[0];
        $ages = $new_ages[0];
    }else{
        $names = $new_names[$_GET['page'] - 1];
        $ages = $new_ages[$_GET['page'] - 1];
    }

    
    if(isset($names) && isset($ages)) : ?>
        
        <table>
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Age</td>
                </tr>
            </thead>
        
            <tbody>
                <?php for($i = 0; $i<count($names);$i++) :?>
                   
                        <tr>
                            <td><?= $names[$i] ?></td>
                            <td><?= $ages[$i] ?></td>
                        </tr>
                    
                <?php endfor; ?>
            </tbody>
        </table>
        <?php if(isset($_GET['page']) && $_GET['page'] != 1): ?>
            <a href="index.php?page=<?= $_GET['page']-1;  ?>">Prev</a>
        <?php endif; ?>
        <?php if(isset($_GET['page'])): ?>
            <?php for($i=$_GET['page'];$i<=$pages;$i++) :?>
                <?php if(isset($_GET['page']) && $_GET['page'] <= $pages) : ?>

                <?php endif; ?>

            <?php endfor; ?>
        <?php endif; ?>
        <?php if(isset($_GET['page']) && $_GET['page'] !== $pages && $_GET['page'] + 1 <= $pages) :?>
            <a href="index.php?page=<?= $_GET['page'] + 1 ?>">Next</a>
        <?php endif; ?>
<?php
    endif;
}


if(isset($_GET['filter'])) :
    $names = explode($_GET['delimeter'],$_GET['names']);
    $ages = explode($_GET['delimeter'],$_GET['ages']);
    $_SESSION['names'] = $names;
    $_SESSION['ages'] = $ages;

   
    Location('index.php?page=1');

   
?>
   
<?php 
    endif;
?>