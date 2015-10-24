<?php

namespace Keihi\Services;

use Keihi\Services\KeihiServiceInterface;
use Keihi\Repositories\KeihiInterface;
use Illuminate\Validation\Factory as ValidateFactory;

/**
 * Class KeihiService
 * @package Keihi\Services
 */
class KeihiService implements KeihiServiceInterface
{
    /**
     * @var KeihiInterface
     */
    protected $keihiInterface;

    /**
     * @var ValidateFactory
     */
    protected $validateFactory;

    /**
     * @var array
     */
    protected $rules = ["title" => "required|max: 100", "price" => "required|integer|min:0|max:100000", "url" => "required"];

    /**
     * @param KeihiInterface $keihiInterface
     * @param ValidateFactory $validateFactory
     */
    public function __construct(KeihiInterface $keihiInterface, ValidateFactory $validateFactory)
    {
        $this->keihiInterface = $keihiInterface;
        $this->validateFactory = $validateFactory;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function get($id)
    {
        return $this->keihiInterface->get($id);
    }

    /**
     * @return mixed
     */
    public function getList()
    {
        return $this->keihiInterface->getList();
    }

    /**
     * @param $request
     * @param $id
     * @return $id
     */
    public function save($request, $id=null)
    {
        $input = $request->only(['title', 'price', 'url']);
        $v = $this->validateFactory->make($input, $this->rules);
        if ($v->fails()) {
            return null;
        }

        if (is_null($id)) {
            $id = $this->keihiInterface->create($input);
        } else {
            $id = $this->keihiInterface->update($id, $input);
        }

        return $id;
    }

    /**
     * @param $id
     * @return bool
     */
    public function delete($id)
    {
        $this->keihiInterface->delete($id);
        return true;
    }

    /**
     * @return mixed
     */
    public function createEntity()
    {
        return $this->keihiInterface->createEntity();
    }
}