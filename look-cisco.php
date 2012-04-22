<?php

class CiscoDevice extends BaseDevice {
    function setup_cmds() {
        foreach($GLOBALS["all_cmds"] as $cmd) {
            switch($cmd->display) {
                case "ping":
                    $cmd->set_command("ping %arg%");
                    $cmd->allow_ip_argument();
                    $cmd->allow_device_argument();
                    break;

                case "traceroute":
                    $cmd->set_command("traceroute %arg%");
                    $cmd->allow_ip_argument();
                    $cmd->allow_device_argument();
                    break;

                case "show route":
                    $cmd->set_command("show ip route %arg%");
                    $cmd->allow_ip_argument();
                    $cmd->allow_device_argument();
                    break;

                case "show bgp route":
                    $cmd->set_command("show ip bgp route %arg%");
                    $cmd->allow_ip_argument();
                    $cmd->allow_subnet_argument("full");
                    $cmd->allow_device_argument();
                    break;

                case "show eigrp topology":
                    $cmd->set_command("show ip eigrp topology %arg%");
                    $cmd->allow_subnet_argument();
                    break;
            }

        }
    }
}

?>
