find . -name "*.php" -print0 | xargs -0 -n1 php -l || exit 1
echo -e "ms\nstop\n\n" | php src/pocketmine/PocketMine.php --no-setup
if ls plugins/DarkSystem/DarkSystem*.phar >/dev/null 2>&1; then
    echo "DarkSystem.phar successfully created!"
else
    echo "DarkSystem.phar wasn't able to be created!"
    exit 1
fi