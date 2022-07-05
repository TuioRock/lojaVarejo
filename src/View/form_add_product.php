<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Varejo - Cadastro de Produtos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header>
        <nav class="bg-green-400">
            <ul class="flex">
                <li class="mr-3">
                    <a href="../../index.html">Home</a>
                </li>
                <li>
                    <a href="#">Cadastro de Produtos</a>
                </li>
                <li>
                    <a class="ml-3" href="../View/form_add_provider.php">Cadastro de Fornecedores</a>     
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <form action="../Controller/Product.php" method="POST">
            <section class="columns-3 m-4">
                <article>
                    <label for="barCode" class="cursor-pointer">Código de Barra</label>
                    <input type="number" name="barCode" id="barCode" class="border border-green-600">
                </article>
                <article>
                    <label for="name" class="cursor-pointer">Nome do Produto</label>
                    <input type="text" name="name" id="name" class="border border-green-600"> 
                </article>
                <article>
                <label for="provider" class="cursor-pointer">Fornecedora</label>
                <select name="provider" id="provider" class="background bg-gray-200">
                    <option value="1">fornecedor 1</option>
                    <option value="2">fornecedor 2</option>
                    <option value="3">fornecedor 3</option>
                </select>
                </article>
            </section>
            <section class="columns-3">
                <article>
                    <label for="cost" class="cursor-pointer">Custo de aquisição</label>
                    <input type="number" name="cost" id="cost" class="border border-green-600">
                </article>
                <article>
                    <label for="quantity" class="cursor-pointer">Quantidade adiquirida</label>
                    <input type="number" name="quantity" id="quantity" class="border border-green-600">
                </article>
            </section>
            <article class="flex justify-center mt-4">
                <button type="submit" class="pl-4 pr-4 pt-2 pb-2 rounded text white bg-green-500">Cadastrar</button>
            </article>
        </form>
    </main>
</body>
</html>