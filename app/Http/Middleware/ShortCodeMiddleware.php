<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\ShortCode;
use App\Models\Owner;
use App\Models\Car;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ShortCodeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
{
    $response = $next($request);

    if (!method_exists($response, 'content')) {
        return $response;
    }

    $content = $response->content();

    preg_match_all('/\[\[owner_(\d+)\]\]/', $content, $ownerMatches);

    foreach ($ownerMatches[0] as $key => $shortcode) {
        $ownerId = $ownerMatches[1][$key];

        $owner = Owner::find($ownerId);

        if ($owner) {
            $replacement = "<td>$owner->id</td>"
                         . "<td>$owner->name</td>"
                         . "<td>$owner->surname</td>"
                         . "<td>$owner->phone</td>"
                         . "<td>$owner->email</td>"
                         . "<td>$owner->address</td>";

            $content = str_replace($shortcode, $replacement, $content);
        }
    }

    preg_match_all('/\[\[car_(\d+)\]\]/', $content, $carMatches);

    foreach ($carMatches[0] as $key => $shortcode) {

        $carId = $carMatches[1][$key];

        $car = Car::find($carId);

        $imagesCount = $car->images()->count();

        if ($car) {
            $replacement = "<td>$car->id</td>"
                         . "<td>$car->reg_number</td>"
                         . "<td>$car->brand</td>"
                         . "<td>$car->model</td>"
                         . "<td>$car->owner_id</td>"
                         . "<td>$imagesCount</td>";

            $content = str_replace($shortcode, $replacement, $content);
        }
    }

    $response->setContent($content);

    return $response;
}
}
