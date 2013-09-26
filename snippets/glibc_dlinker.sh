# find name of glibc's dynamic linker
readelf -l /bin/bash | grep interpreter 
