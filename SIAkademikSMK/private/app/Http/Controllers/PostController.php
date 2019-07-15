<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
  public function index()
  {
    return view('posts.halamanberita');
  }

  public function create()
  {
      return view('posts.tambahberita');
  }

  public function store(Request $request)
  {
      $this->validate($request,[
        'title' => 'min:5',
        'content' => 'min:5'
        ]);

        Post::create([
          'title' => $request->title,
          'content' => $request->content
        ]);
        return redirect ()->route('SemuaBerita')->with('success', 'Tambah Berita Berhasil');
  }

  public function show(Post $post)
  {
      return view('posts.blogbaru', compact('post'));
  }

  public function edit(Post $post)
  {
      return view('posts.editberita', compact('post'));
  }

  public function update(Request $request, Post $post)
  {
    $post->update([
      'title' => $request->title,
      'content' => $request->content
    ]);

    return redirect()->route('SemuaBerita')->with('success','Data Berita berhasil diubah');
  }

  public function destroy($id)
  {
    // $penduduk->delete();
    // return redirect()->route('SemuaPenduduk')->with('success','Data Penduduk berhasil dihapus');

    $post = Post::find($id);
    $post->delete();
    return redirect()->route('SemuaBerita')->with('success','Data Berita berhasil dihapus');
  }
}
