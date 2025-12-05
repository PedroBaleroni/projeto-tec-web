<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Piscina {{$piscina->nome}} </title>
</head>
<body>
    <form action="{{ route('piscinas.update')}}" 
    method="POST">
    @csrf

    <div>
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome"
            value= "{{$piscina->nome}}">
    </div>
    <div>
        <label for="capacidade">Capacidade</label>
        <input type="number" 
        value = "{{$piscina->capacidade}}"
        id="capacidade" name="capacidade">
    </div>
    <div>
        <label for="agenda">Agenda:</label>
        <input type="text" id="agenda"
        value= "{{$piscina->agenda}}" name="agenda">
    </div>
    <div>
        
        <label for="ativo">Piscina está ativa?</label>
        <input type="checkbox" id="ativo" name="ativo" 
        /
       {{-- @if({{$piscina->ativo}} == true) checked @endif --}}
    
    >
    </div>
    <button type="submit">Atualizar piscina</button>
    </form>
</body>
</html>