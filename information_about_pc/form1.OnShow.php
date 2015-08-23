<?php
$version = osinfo_winver();
c("label1")->caption = "Processor identifier : ".$_ENV["PROCESSOR_IDENTIFIER"].
"\n\rProcessor architeW6432 : ".$_ENV["PROCESSOR_ARCHITEW6432"].
"\n\rProcessor architecture : ".$_ENV["PROCESSOR_ARCHITECTURE"].
"\n\rProcessor level : ".$_ENV["PROCESSOR_LEVEL"].
"\n\rProcessor revision : ".$_ENV["PROCESSOR_REVISION"].
"\n\rNumber of processors : ".$_ENV["NUMBER_OF_PROCESSORS"];
c("label2")->caption = "OS : ".$_ENV["OS"].
"\n\rVersion : ".$version.
"\n\rFolder of OS : ".$_ENV["windir"].
"\n\rWindows tracing flags : ".$_ENV["windows_tracing_flags"].
"\n\rWindows tracing logfile: ".$_ENV["windows_tracing_logfile"];
c("label3")->caption = "All users profile : ".$_ENV["ALLUSERSPROFILE"].
"\n\rAppData : ".$_ENV["APPDATA"].
"\n\rCommon program files : ".$_ENV["CommonProgramFiles"].
"\n\rCommon program files (x86) : ".$_ENV["CommonProgramFiles(x86)"].
"\n\rCommon programW6432 : ".$_ENV["CommonProgramW6432"].
"\n\rSystem drive : ".$_ENV["SystemDrive"].
"\n\rSystem root : ".$_ENV["SystemRoot"];
c("label4")->caption = osinfo_computername()." (User : ".$_ENV["USERNAME"].")";
