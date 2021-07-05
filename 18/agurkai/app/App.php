<?php

class App {

    public static function start()  //-kad prieiti prie 
                                    // statinio metodo sukuriam metoda ir cia paleidziam buferi
    {                               //tam kad neiseitu bodys, nes jau negalesim paleisti headerio
        ob_start();                 //-pastatom kibira
        self::router();             //-pasileidziam routeri, viskas subega i kibira ir neiseina i narsykle echoinimo keliu
        ob_end_flush();             //-kai viskas surinkta, ispilam i narsykle
    }
                                    //dar vienas helperis:
    public static function view($file, $data = [])  //jeigu nieko nereikia perduoti, musu data = tuscias masyvas                          
    {                           
        extract($data);             //isekstaktina is arreyaus, compact- sudeda i arrey
        require DIR.'views/'.$file.'.php';
    }

    private static function router()
    {
        $uri = str_replace(INSTALL_DIR, '', $_SERVER['REQUEST_URI']);
        $uri = explode('/', $uri);

        if ($uri[0] == 'testas' && isset($uri[1])) {
            return (new AgurkaiController)->agurkuTest($uri[1]);
        }
        if ($uri[0] === '' && count($uri) === 1) {
            return (new AgurkaiController)->index();
        }

        self::view('404');
        http_response_code(404);

    }
} 