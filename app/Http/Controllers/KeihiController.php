<?php

namespace Keihi\Http\Controllers;

use Illuminate\Http\Request;
use Keihi\Http\Requests;
use Keihi\Http\Controllers\Controller;
use Keihi\Services\KeihiServiceInterface;

/**
 * Class KeihiController
 * @package Keihi\Http\Controllers
 */
class KeihiController extends Controller
{
    /**
     * @var KeihiServiceInterface
     */
    private $keihiService;

    /**
     * @param KeihiServiceInterface $keihiServiceInterface
     */
    public function __construct(KeihiServiceInterface $keihiServiceInterface)
    {
        $this->keihiService = $keihiServiceInterface;
    }

    /**
     * 一覧
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = $this->keihiService->getList();
        return view('keihi.list', compact('list'));
    }

    /**
     * 新規入力画面
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $keihi = $this->keihiService->createEntity();
        return view('keihi.edit', compact('keihi'));
    }

    /**
     * 新規登録処理
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $this->keihiService->save($request);
        return $this->show($id);
    }

    /**
     * 詳細
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $keihi = $this->keihiService->get($id);
        return view('keihi.detail', compact('keihi'));
    }

    /**
     * 編集画面
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $keihi = $this->keihiService->get($id);
        return view('keihi.edit', compact('keihi'));
    }

    /**
     * 更新処理
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id = $this->keihiService->save($request, $id);
        return $this->show($id);
    }

    /**
     * 削除処理
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->keihiService->delete($id);
        return $this->index();
    }
}
