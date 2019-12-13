<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace rpc\contract\news;

interface NewsInterface
{
	const RPC = 'news';

	public function get($name);
}

interface SuframeInterface
{
	const RPC = 'news';

	/**
	 * 注册
	 * @param $data
	 * @return string
	 * @throws \Exception
	 */
	public function register($data): string;


	/**
	 * 通知更新
	 * @param $data
	 * @return bool
	 */
	public function notify($data): bool;
}


namespace rpc\contract\goods;

interface GoodsInterface
{
	const RPC = 'goods';

	public function get($name);
}

interface SuframeInterface
{
	const RPC = 'goods';

	/**
	 * 注册
	 * @param $data
	 * @return string
	 * @throws \Exception
	 */
	public function register($data): string;


	/**
	 * 通知更新
	 * @param $data
	 * @return bool
	 */
	public function notify($data): bool;
}
