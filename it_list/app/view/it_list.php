<?php require_once "app/view/header.php"; ?>
    <div style="text-align: right; margin: 20px 0px 10px;">
        <a id="btnAddAction" href="index.php?action=it_list-add"><img src="app/view/image/icon-add.png" />Přidat zařízení</a>
    </div>
    <div id="toys-grid">
        <table cellpadding="10" cellspacing="1">
            <thead>
                <tr>
                    <th><strong>Název zařízení</strong></th>
                    <th><strong>Množství</strong></th>
                    <th><strong>Vydáno (komu)</strong></th>
                    <th><strong>Datum</strong></th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                    <?php
                    if (! empty($result)) {
                        foreach ($result as $k => $v) {
                            ?>
          <tr>
                    <td><?php echo $result[$k]["name"]; ?></td>
                    <td><?php echo $result[$k]["quantity"]; ?></td>
                    <td><?php echo $result[$k]["issue"]; ?></td>
                    <td><?php echo $result[$k]["date"]; ?></td>
                    <td><a class="btnEditAction"
                        href="index.php?action=it_list-edit&id=<?php echo $result[$k]["id"]; ?>">
                        <img src="app/view/image/icon-edit.png" />
                        </a>
                        <a class="btnDeleteAction" 
                        href="index.php?action=it_list-delete&id=<?php echo $result[$k]["id"]; ?>">
                        <img src="app/view/image/icon-delete.png" />
                        </a>
                    </td>
                </tr>
                    <?php
                        }
                    }
                    ?>
                
            
            
            <tbody>
        
        </table>
    </div>
</body>
</html>