<?
$mod_name="tapper";
$mod_version="1.1";
$mod_path="/usr/share/blackbulb/www/modules/$mod_name";
$mod_logs="$log_path/dnsmasq-tapper.log";
$mod_logs_history="$mod_path/includes/logs/";
$mod_logs_panel="disabled";
$mod_panel="show";
$mod_type="service";
$mod_alias="Tapper";

# EXEC
$bin_danger = "/usr/share/blackbulb/bin/danger";
$bin_sudo = "/usr/bin/sudo";
$bin_hostapd = "$mod_path/includes/hostapd";
$bin_hostapd_cli = "$mod_path/includes/hostapd_cli";
$bin_sh = "/bin/sh";
$bin_echo = "/bin/echo";
$bin_grep = "/usr/bin/ngrep";
$bin_killall = "/usr/bin/killall";
$bin_cp = "/bin/cp";
$bin_chmod = "/bin/chmod";
$bin_sed = "/bin/sed";
$bin_rm = "/bin/rm";
$bin_route = "/sbin/route";
$bin_perl = "/usr/bin/perl";

$bin_danger = "/usr/share/blackbulb/bin/danger";
$bin_killall = "/usr/bin/killall";
$bin_ifconfig = "/sbin/ifconfig";
$bin_iptables = "/sbin/iptables";
$bin_dnsmasq = "/usr/sbin/dnsmasq";
$bin_sed = "/bin/sed";
$bin_echo = "/bin/echo";
$bin_rm = "/bin/rm";
$bin_mv = "/bin/mv";

# ISUP
$mod_isup="(ps auxww;ifconfig) | grep -iEe 'dnsmasq.+$mod_name|bridge0' | grep -v -e grep";
?>
