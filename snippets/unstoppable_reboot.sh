# unstoppable reboot, great for when 'reboot' doesnt work

echo 10 > /proc/sys/kernel/panic 
echo 1 > /proc/sys/kernel/sysrq 
echo s > /proc/sysrq-trigger 
sleep 5 
echo s > /proc/sysrq-trigger 
sleep 1 
echo b > /proc/sysrq-trigger 
