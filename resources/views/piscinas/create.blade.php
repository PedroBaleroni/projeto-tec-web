<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar Piscina</title>
</head>
<body>
    <form action="{{ route('piscinas.store')}}" 
    method="POST">
    @csrf

    <div>
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome">
    </div>
    <div>
        <label for="capacidade">Capacidade</label>
        <input type="number" 
        id="capacidade" name="capacidade">
    </div>
    <div>
        <label for="agenda">Agenda:</label>
        <input type="text" id="agenda" name="agenda">
    </div>
    <div>
        <label for="ativo">Piscina está ativa?</label>
        <input type="checkbox" id="ativo" name="ativo">
    </div>
    <button type="submit">Criar piscina</button>
    </form>
</body>
</html>