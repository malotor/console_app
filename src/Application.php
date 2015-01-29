<?php

namespace malotor\console_app;

class Application {
    
    public function __construct($console) {
        $this->console = $console;
    }
    
    public function printMainMenu() {
        $this->console->lightGreen("Select an option..");
        $this->console->blue("    1) Show memory usage");
        $this->console->blue("    2) Show system date");
        $this->console->blue("    3) List files");
        $this->console->blue("    x) Exit");  
    }
    
    public function cprint($message) {
        $this->console->out($message);
       
    }
}
