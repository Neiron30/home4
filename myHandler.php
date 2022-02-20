<?php

class myHandler implements SessionHandlerInterface
{


    public function close(): bool
    {
        return true;
        // TODO: Implement close() method.
    }

    public function destroy($id): bool
    {
        $files = "./Session/sesid_$id.json";
        if (file_exists($files)){
            unlink($files);

        }
        return true;
        // TODO: Implement destroy() method.
    }

    public function gc($max_lifetime)
    {

        // TODO: Implement gc() method.
    }

    public function open($path, $name): bool
    {


    $name = 'sesid';
          return true;
        // TODO: Implement open() method.
    }

    public function read($id): string
    {

        return (string) file_get_contents("./Session/sesid_$id.json");

        // TODO: Implement read() method.
    }

    /**
     * @param string $id
     * @param string $data
     * @return bool|int
     */
    public function write($id, $data)
    {
        return  file_put_contents("./Session/sesid_$id.json", json_encode($_SESSION)) ;

        // TODO: Implement write() method.
    }
}
