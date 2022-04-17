<?php 

#[\Since('8.1')]
class CURLStringFile
{
    public string $data;
    public string $postname;
    public string $mime;
    public function __construct(string $data, string $postname, string $mime = "application/octet-stream")
    {
    }
}