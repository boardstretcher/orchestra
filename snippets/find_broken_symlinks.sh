# find broken, un-needed symlinks on a system

find / -xtype l -exec ls -l {} \; 
