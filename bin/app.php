<?php
    
    require dirname(__DIR__) . '/vendor/autoload.php';
    
    use malotor\console_app\Application;
    
    // Stop the script giving time out errors..
    set_time_limit(0);

    // Already defined in autoload.php
    //define('STDIN',fopen("php://stdin","r"));
       
    $climate = new \League\CLImate\CLImate;
    $mainApplication = new Application($climate); 
                 
    // Main event loop to capture top level command..
    while(!0)
    {
        $mainApplication->printMainMenu();
       
        // Decide what menu option to select based on input..
        switch(trim(fgets(STDIN,256)))
        {
            case 1:
                $mainApplication->cprint( exec('free') );
                break;
            case 2:
                $mainApplication->cprint( exec('date') );
                break;
            case 3:
                $mainApplication->cprint( exec('ls -l\n') );
                break;
            case "x":
                exit();
                
            default: 
                $mainApplication->cprint("Command doesn't exists!!");
                break;
        }

    }

    // Close standard in..
    fclose(STDIN);

