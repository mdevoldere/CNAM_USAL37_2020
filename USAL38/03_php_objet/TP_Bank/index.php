<html>
    <head>
        <meta charset="utf-8">
        <title>Bank Manager</title>
        <style>
            .rouge {
                color: red;
            }
            p {
                font-weight: bold;
            }
        </style>
        <script>
            alert('bienvenue');
        </script>
    </head>
    <body>
        <header>
            <h1>Bank Manager</h1>
        </header>
        <main>

        <?php 
            $pdo = new PDO('mysql:host=localhost;port=3306;dbname=usal37_tp_bank;charset=utf8', 'root', ''); 

            $statement = $pdo->query("SELECT * FROM banks WHERE bank_id=1002;");

            $bank = $statement->fetch();

            echo $bank['bank_name'];
            echo '<br>';
            echo $bank[0];

            //echo '<pre>' . var_export($banks, true) . '</pre>';

            echo '<p>Hello World</p>';


            $statement = $pdo->query("SELECT account_id, account_owner, account_balance, bank_name 
            FROM accounts 
            INNER JOIN banks ON banks.bank_id = accounts.bank_id
            WHERE account_id > 20;");

            $accounts = $statement->fetchAll();

            foreach($accounts as $oneAccount) 
            {
                echo '<span class="rouge">'. $oneAccount['account_owner'] . '</span>';
                echo ' - ';
                echo $oneAccount['bank_name'];
                echo '<br>';
            }

        ?>

        </main>
        <footer>
        </footer>
    </body>
</html>