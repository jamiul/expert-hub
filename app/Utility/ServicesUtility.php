<?php

namespace App\Utility;

use App\Models\Service;
use App\Models\ServicePackage;
use Auth;
use Str;

class ServicesUtility
{
    public static function createService($request)
    {
        $service = new Service();
        $servicePackage = new ServicePackage();

        $service->title = $request->title;
        $service->image = $request->service_photo;
        $service->about_service = $request->about_service;
        $service->project_cat_id = $request->category_id;
        $service->user_id = Auth::user()->id;
        $service->slug = Str::slug($request->title, '-') . date('Ymd-his');
        $service->save();

        $requestedServicePackages = ServicesUtility::make_package_array($request);

        if ($service->id != null) {
            foreach ($requestedServicePackages as $key => $servicePackage) {
                $newPackage = new ServicePackage();
                $newPackage->service_type = $key;
                foreach ($servicePackage as $key => $servicePackageDetails) {
                    $newPackage->$key = $servicePackage[$key];
                }
                $newPackage->service_id = $service->id;
                $newPackage->save();
            }
            return 1;
        }

        return 0;
    }

    public static function makePackageArray($request)
    {
        $servicePackages = array();

        if ($request->has('basic_price')) {
            $servicePackages['basic']['service_price'] = $request->basic_price;
            $servicePackages['basic']['delivery_time'] = $request->basic_delivery_time;
            $servicePackages['basic']['revision_limit'] = $request->basic_revision_limit;
            $servicePackages['basic']['feature_description'] = json_encode($request->basic_included_description);
        }

        if (!is_null($request->standard_price) && !is_null($request->standard_delivery_time) && !is_null($request->standard_revision_limit) && !is_null($request->standard_included_description)) {
            $servicePackages['standard']['service_price'] = $request->standard_price;
            $servicePackages['standard']['delivery_time'] = $request->standard_delivery_time;
            $servicePackages['standard']['revision_limit'] = $request->standard_revision_limit;
            $servicePackages['standard']['feature_description'] = json_encode($request->standard_included_description);
        }

        if (!is_null($request->premium_price) && !is_null($request->premium_delivery_time) && !is_null($request->premium_revision_limit) && !is_null($request->premium_included_description)) {
            $servicePackages['premium']['service_price'] = $request->premium_price;
            $servicePackages['premium']['delivery_time'] = $request->premium_delivery_time;
            $servicePackages['premium']['revision_limit'] = $request->premium_revision_limit;
            $servicePackages['premium']['feature_description'] = json_encode($request->premium_included_description);
        }

        return $servicePackages;
    }

    public static function updateService($request, $slug)
    {
        $service = Service::where('slug', $slug)->first();
        $servicePackages = $service->service_packages;

        $service->title = $request->title;
        $service->image = $request->service_photo;
        $service->about_service = $request->about_service;
        $service->project_cat_id = $request->category_id;
        $service->user_id = Auth::user()->id;
        if ($service->slug == null) {
            $service->slug = Str::slug($request->title, '-') . date('Ymd-his');
        }
        $counter = 0;
        $requestedServicePackages = ServicesUtility::make_package_array($request);

        if ($service->save()) {
            foreach ($requestedServicePackages as $key => $servicePackage) {
                $newPackage = $servicePackages[$counter++];
                $newPackage->service_type = $key;
                foreach ($servicePackage as $key => $servicePackageDetails) {
                    $newPackage->$key = $servicePackage[$key];
                }
                $newPackage->service_id = $service->id;
                $newPackage->save();
            }
            return 1;
        }

        return 0;
    }

    public static function canCreateService()
    {
        $services = Service::where('user_id', Auth::user()->id)->get();
        $serviceCount = $services->count();
        if ($serviceCount < Auth::user()->userPackage->service_limit) {
            return 1;
        }

        return 0;
    }

    public static function deleteService($slug)
    {
        $service = Service::where('slug', $slug)->first();
        $servicePackages = $service->service_packages;
        if ($service->delete()) {
            foreach ($servicePackages as $servicePackage) {
                $servicePackage->delete();
            }

            return 1;
        }

        return 0;
    }
}
