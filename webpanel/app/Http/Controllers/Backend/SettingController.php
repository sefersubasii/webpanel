<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Setting;
use App\Traits\HasImage;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    use HasImage;

    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting::all();

        return view('settings.index', compact('settings'));
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        // dd($request->all(), Setting::pluck('type', 'key'));

        foreach (Setting::pluck('key') as $key) {
            $value = request()->input($key . '_i18n');

            if ($file = request()->file($key)) {
                if ($file instanceof \Illuminate\Http\UploadedFile) {
                    $oldFilePath = Setting::where('key', $key)->first(['value'])->value;

                    $value = json_encode([
                        config('translatable.default') => $this->uploadImage($file, $oldFilePath)
                    ]);
                }
            }

            if (!$value) {
                continue;
            }

            Setting::where('key', $key)
                ->update(['value' => $value]);
        }

        return redirect()->success('settings.index');
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function deleteFile(Setting $setting)
    {
        $this->deleteImage($setting->value);

        $setting->update(['value' => null]);

        return redirect()->success('settings.index');
    }
}
