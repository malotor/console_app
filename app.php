<?php
    
    require dirname(__DIR__) . '/vendor/autoload.php';
    
    use malotor\console_app\UserInterface as UI;
    

    // Stop the script giving time out errors..
    set_time_limit(0);

    // This opens standard in ready for interactive input..
    define('STDIN',fopen("php://stdin","r"));
          
    
    // Main event loop to capture top level command..
    while(!0)
    {
        UI::printMainMenu();
       
        // Decide what menu option to select based on input..
        switch(trim(fgets(STDIN,256)))
        {
            case 1:
                break;
            case 2:
                break;
            case 3:
                UI::cprint( exec('ls -l\n') );
                break;
            case "x":
                exit();
                d
            default: 
                UI::cprint("Command doesn't exists!!\n\n");
                break;
        }

    }

    // Close standard in..
    fclose(STDIN);

