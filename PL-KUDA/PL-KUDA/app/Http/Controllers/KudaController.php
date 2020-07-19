<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Str;


class KudaController extends Controller
{
    
    public function beranda()
    {
        $data_news = \App\News::all();
        return view('beranda', ['data_news' => $data_news]);
    }
    public function race()
    {
        $data_event = \App\Event::all();
        return view('race' ,['data_event' => $data_event]);
    }
    public function sell()
    {
        return view('sell');
    }
    public function news()
    {
        $data_news = \App\News::all();
        return view('news', ['data_news' => $data_news]);
    }


    public function viewnews($id)
    {
        $news = \App\News::find($id);
        return view('viewmore', ['news' => $news]);
    }


    public function about()
    {
        return view('about');
    }
    public function horse()
    {
        $data_horse = \App\Horse::all();
        return view('horse', ['data_horse' => $data_horse]);
    }





    public function manageheader(Request $request)
    {
        if ($request->has('cari')) {
            $data_header = \App\Header::where('tanggal_head', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_header = \App\Header::all();
        }
        return view('admin.mheader', ['data_header' => $data_header]);
    }


    public function editheader($id)
    {
        $data_header = \App\Header::find($id);
        return view('admin.edith', ['data_header' => $data_header]);
    }
    public function updateheader(Request $request, $id)
    {
        $header = \App\Header::find($id);
        $header->update($request->all());

        if ($request->hasFile('gambar_head')) {
            $request->file('gambar_head')->move('images/', $request->file('gambar_head')->getClientOriginalName());
            $header->gambar_head = $request->file('gambar_head')->getClientOriginalName();
            $header->save();
        }
        return redirect('/PL-Kuda/mheader')->with('sukses', 'Data berhasil diupdate');
    }







    public function manageevent(Request $request)
    {
        if ($request->has('cari')) {
            $data_event = \App\Event::where('tanggal_event', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_event = \App\Event::all();
        }
        return view('admin.mevent', ['data_event' => $data_event]);
    }

    public function createevent(Request $request)
    {
        \App\Event::create($request->all());
        return redirect('/PL-Kuda/mevent')->with('sukses', 'Data berhasil diinput');
    }
    public function editevent($id)
    {
        $event = \App\Event::find($id);
        return view('admin.edite', ['event' => $event]);
    }
    public function updateevent(Request $request, $id)
    {
        $event = \App\Event::find($id);
        $event->update($request->all());
        return redirect('/PL-Kuda/mevent')->with('sukses', 'Data berhasil diupdate');
    }
    public function deleteevent($id)
    {
        $event = \App\Event::find($id);
        $event->delete($event);
        return redirect('/PL-Kuda/mevent')->with('sukses', 'Data berhasil dihapus');
    }








    public function managehorse(Request $request)
    {
        if ($request->has('cari')) {
            $data_horse = \App\Horse::where('nama_horse', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_horse = \App\Horse::all();
        }
        return view('admin.mhorse', ['data_horse' => $data_horse]);
    }

    public function createhorse(Request $request)
    {
        $horse = \App\Horse::create($request->all());
        if ($request->hasFile('gb_kuda')) {
            $request->file('gb_kuda')->move('images/', $request->file('gb_kuda')->getClientOriginalName());
            $horse->gb_kuda = $request->file('gb_kuda')->getClientOriginalName();
            $horse->save();
        }
        return redirect('/PL-Kuda/mhorse')->with('sukses', 'Data berhasil diSimpan');
    }
    public function edithorse($id)
    {
        $horse = \App\Horse::find($id);
        return view('admin.editho', ['horse' => $horse]);
    }
    public function updatehorse(Request $request, $id)
    {
        $horse = \App\Horse::find($id);
        $horse->update($request->all());
        if ($request->hasFile('gb_kuda')) {
            $request->file('gb_kuda')->move('images/', $request->file('gb_kuda')->getClientOriginalName());
            $horse->gb_kuda = $request->file('gb_kuda')->getClientOriginalName();
            $horse->save();
        }
        return redirect('/PL-Kuda/mhorse')->with('sukses', 'Data berhasil diupdate');
    }
    public function deletehorse($id)
    {
        $horse = \App\Horse::find($id);
        $horse->delete($horse);
        return redirect('/PL-Kuda/mhorse')->with('sukses', 'Data berhasil dihapus');
    }






    public function managenews(Request $request)
    {
        if ($request->has('cari')) {
            $data_news = \App\News::where('tgl_news', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_news = \App\News::all();
        }
        return view('admin.mnews', ['data_news' => $data_news]);
    }

    public function createnews(Request $request)
    {
        $news = \App\News::create($request->all());
        if ($request->hasFile('gb_berita')) {
            $request->file('gb_berita')->move('images/', $request->file('gb_berita')->getClientOriginalName());
            $news->gb_berita = $request->file('gb_berita')->getClientOriginalName();
            $news->save();
        }
        return redirect('/PL-Kuda/mnews')->with('sukses', 'Data berhasil diSimpan');
    }
    public function editnews($id)
    {
        $news = \App\News::find($id);
        return view('admin.editn', ['news' => $news]);
    }
    public function updatenews(Request $request, $id)
    {
        $news = \App\News::find($id);
        $news->update($request->all());
        if ($request->hasFile('gb_berita')) {
            $request->file('gb_berita')->move('images/', $request->file('gb_berita')->getClientOriginalName());
            $news->gb_berita = $request->file('gb_berita')->getClientOriginalName();
            $news->save();
        }
        return redirect('/PL-Kuda/mnews')->with('sukses', 'Data berhasil diupdate');
    }
    public function deletenews($id)
    {
        $news = \App\News::find($id);
        $news->delete($news);
        return redirect('/PL-Kuda/mnews')->with('sukses', 'Data berhasil dihapus');
    }




    public function managemember(Request $request)
    {
        if ($request->has('cari')) {
            $data_member = \App\Member::where('nm_depan', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_member = \App\Member::all();
        }
        return view('admin.mmember', ['data_member' => $data_member]);
    }

    public function createmember(Request $request)
    {
       
        $user=new \App\User;
        $user->role='member';
        $user->name=$request->nm_depan;
        $user->email=$request->email;
        $user->password=bcrypt('rahasia');
        $user->remember_token=Str::random(60);
        $user->save();

        $request->request->add(['user_id'=>$user->id]);
        $member=\App\Member::create($request->all());
        if ($request->hasFile('gb_member')) {
            $request->file('gb_member')->move('images/', $request->file('gb_member')->getClientOriginalName());
            $member->gb_member = $request->file('gb_member')->getClientOriginalName();
            $member->save();
        }
        return redirect('/PL-Kuda/mmember')->with('sukses', 'Data berhasil diinput');
        

    }
    public function editmember($id)
    {
        $member = \App\Member::find($id);
        return view('admin.editm', ['member' => $member]);
    }
    public function updatemember(Request $request, $id)
    {
        $member = \App\Member::find($id);
        $member->update($request->all());
        if ($request->hasFile('gb_member')) {
            $request->file('gb_member')->move('images/', $request->file('gb_member')->getClientOriginalName());
            $member->gb_member = $request->file('gb_member')->getClientOriginalName();
            $member->save();
        }
       
        return redirect('/PL-Kuda/mmember')->with('sukses', 'Data berhasil diupdate');
    }
    
    public function deletemember(Request $request,$id)
    {
       
        
        $member = \App\Member::find($id);
        $member->delete($member);
        return redirect('/PL-Kuda/mmember')->with('sukses', 'Data berhasil dihapus');
    }
    public function viewmember($id)
    {
        $data_member = \App\Member::find($id);
        return view('admin.viewm', ['data_member' => $data_member]);
    }

}
