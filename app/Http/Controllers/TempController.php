<?php

namespace App\Http\Controllers;

use App\Services\TempService;
use Illuminate\Http\Request;

class TempController extends Controller
{
    /**
     * @var TempService
     */
    private $service;

    /**
     * @param TempService $repository
     */
    public function __construct(TempService $service)
    {
        $this->service = $service;
    }

    /**
     * @OA\GET(
     *     path="/temp",
     *     tags={"temp"},
     *     description="Temp index",
     *     @OA\Response(
     *          response="default",
     *          description="APIエラー時の返却データ",
     *          @OA\JsonContent(
     *              @OA\Property(property="error", type="integer", description="エラー値(0:正常/1:エラー)"),
     *              @OA\Property(property="errorId", type="string", description="エラーID"),
     *              @OA\Property(property="code", type="string", description="エラーコード"),
     *              @OA\Property(property="message", type="string", description="エラーメッセージ"),
     *          )
     *     )
     * ),
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json($this->service->getAll());
    }

    /**
     * @OA\post(
     *      path="/temp",
     *      tags={"temp"},
     *      summary="Find Temp",
     *      description="Temp store",
     *      @OA\Response(
     *          response=200,
     *          description="successful operation"
     *       ),
     *      @OA\Response(
     *          response=400, 
     *          description="Bad request"
     *      ),
     *      @OA\Response(
     *          response=404, 
     *          description="Resource Not Found"
     *      ),
     * )
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return response()->json($this->service->create($request->all()));
    }

    /**
     * @OA\get(
     *      path="/temp/{id}",
     *      tags={"temp"},
     *      summary="Find Temp",
     *      description="Temp index",
     *      @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Id of temp return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *      @OA\Response(
     *          response=200,
     *          description="successful operation"
     *       ),
     *      @OA\Response(
     *          response=400, 
     *          description="Bad request"
     *      ),
     *      @OA\Response(
     *          response=404, 
     *          description="Resource Not Found"
     *      ),
     *      security={
     *         {
     *             "oauth2_security_example": {"write:projects", "read:projects"}
     *         }
     *     },
     * )
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json($this->service->find($id));
    }

    /**
     * @OA\put(
     *      path="/temp/{id}",
     *      tags={"temp"},
     *      summary="Update Temp",
     *      description="Temp update",
     *      @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Id of temp return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *      @OA\Response(
     *          response=200,
     *          description="successful operation"
     *       ),
     *      @OA\Response(
     *          response=400, 
     *          description="Bad request"
     *      ),
     *      @OA\Response(
     *          response=404, 
     *          description="Resource Not Found"
     *      ),
     * )
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $a = $this->service->update($id, $request->all());
        if ($a) {
            return response()->json($a, 200);
        } else {
            return response()->json([], 404);
        }
    }

    /**
     * @OA\delete(
     *      path="/temp/{id}",
     *      tags={"temp"},
     *      summary="Delete Temp",
     *      description="Temp delete",
     *      @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Id of temp return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *      @OA\Response(
     *          response=200,
     *          description="successful operation"
     *       ),
     *      @OA\Response(
     *          response=400, 
     *          description="Bad request"
     *      ),
     *      @OA\Response(
     *          response=404, 
     *          description="Resource Not Found"
     *      ),
     * )
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = $this->service->delete($id);
        if ($a) {
            return response()->json($a, 200);
        } else {
            return response()->json([], 404);
        }
    }
}
