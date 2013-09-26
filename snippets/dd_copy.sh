# copy physical disk to physical disk with status
# utilizing pipe-viewer

# required variables:
# $FROM_DISK : the source disk
# $TO_DISK : destination disk

dd if=/dev/$FROM_DISK | pv | dd of=/dev/$TO_DISK 
