<?php
//interface, serve para definir modelo a ser usado por outras classes

interface Crud {
    public function create($data);
    public function read();
    public function update();
    public function delete();

}

// a classe(Noticias) é obrigada a ter esses metodos do (interface) crud

class Noticias implements Crud {
    public function create($data)
    {
        // logica para ler uma noticia
    }
    public function read()
    {
        // logica para escrever uma noticia
    }
    public function update()
    {
        // logica para atualizar uma noticia        
    }
    public function delete()
    {
        // logica para deletar uma noticia
    }

}