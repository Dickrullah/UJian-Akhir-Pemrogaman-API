<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BukuResource\Pages;
use App\Filament\Resources\BukuResource\RelationManagers;
use App\Models\Buku;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class BukuResource extends Resource
{
    protected static ?string $model = Buku::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            FileUpload::make('gambar')
                ->label('Gambar Buku')
                ->image()
                ->directory('buku')
                ->disk('public')
                ->visibility('public')
                ->preserveFilenames()
                ->imagePreviewHeight('150')
                ->acceptedFileTypes(['image/*'])
                ->maxSize(2048)
                ->multiple(false), 

            TextInput::make('judul')->required()->maxLength(255),
            TextInput::make('penulis')->required()->maxLength(255),
            TextInput::make('penerbit')->required()->maxLength(255),
            TextInput::make('tahun_penerbitan')->numeric()->required(),
            TextInput::make('stok_buku')->numeric()->required(),
            Textarea::make('abstrak')->required(),
            Select::make('kategori_buku')
                ->required()
                ->options([
                    'Fiksi' => 'Fiksi',
                    'Nonfiksi' => 'Nonfiksi',
            ]),
            TextInput::make('isbn')->required()->unique(ignoreRecord: true),
            ]);
    }

    public static function table(Table $table): Table
    {
    return $table
        ->columns([
            ImageColumn::make('gambar')
                ->label('Cover')
                ->circular()
                ->height(50)
                ->getStateUsing(fn ($record) => 'storage/app/public/buku/' . $record->gambar),

            TextColumn::make('judul')
                ->label('Judul')
                ->searchable()
                ->sortable(),

            TextColumn::make('penulis')
                ->label('Penulis')
                ->searchable(),

            TextColumn::make('kategori_buku')
                ->label('Kategori')
                ->badge()
                ->sortable(),

            TextColumn::make('tahun_penerbitan')
                ->label('Tahun')
                ->sortable(),

            TextColumn::make('stok_buku')
                ->label('Stok')
                ->sortable(),

            TextColumn::make('isbn')
                ->label('ISBN'),
        ])
        ->filters([
            //
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\BulkActionGroup::make([
                Tables\Actions\DeleteBulkAction::make(),
            ]),
        ]);
    }

    public static function getRelations(): array
    {
        return [
            
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBukus::route('/'),
            'create' => Pages\CreateBuku::route('/create'),
            'edit' => Pages\EditBuku::route('/{record}/edit'),
        ];
    }
}
