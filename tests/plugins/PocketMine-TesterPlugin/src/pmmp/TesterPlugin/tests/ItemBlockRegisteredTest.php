<?php

/*
 *
 *  ____            _        _   __  __ _                  __  __ ____
 * |  _ \ ___   ___| | _____| |_|  \/  (_)_ __   ___      |  \/  |  _ \
 * | |_) / _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \_____| |\/| | |_) |
 * |  __/ (_) | (__|   <  __/ |_| |  | | | | | |  __/_____| |  | |  __/
 * |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___|     |_|  |_|_|
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PocketMine Team
 * @link http://www.pocketmine.net/
 *
 *
*/

declare(strict_types=1);

namespace pmmp\TesterPlugin\tests;

use pmmp\TesterPlugin\Test;
use pmmp\TesterPlugin\TestFailedException;
use pocketmine\block\Block;
use pocketmine\block\BlockFactory;
use pocketmine\item\ItemFactory;

class ItemBlockRegisteredTest extends Test{

	public function run(){
		if(BlockFactory::isRegistered(Block::COBBLESTONE) and !ItemFactory::isRegistered(Block::COBBLESTONE)){
			throw new TestFailedException("Registered blocks should also show as registered items");
		}

		$this->setResult(Test::RESULT_OK);
	}

	public function getName() : string{
		return "Test ItemFactory::isRegistered() works on registered blocks";
	}

	public function getDescription() : string{
		return "Verifies that ItemFactory::isRegistered returns correct values for block IDs";
	}
}