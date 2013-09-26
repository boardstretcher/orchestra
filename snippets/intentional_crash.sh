# intentionally crash a system for testing

echo 1 > /proc/sys/kernel/sysrq 
echo "c" > /proc/sysrq-trigger 
