<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PemesananResource\Pages;
use App\Models\Pemesanan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;

class PemesananResource extends Resource
{
    protected static ?string $model = Pemesanan::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    protected static ?string $navigationGroup = 'Manajemen Ruangan';

    protected static ?string $modelLabel = 'Pemesanan Ruangan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nomor_ruangan')
                    ->label('Nomor Ruangan')
                    ->required()
                    ->maxLength(50),
                
                TextInput::make('nama_pemesan')
                    ->label('Nama Pemesan')
                    ->required()
                    ->maxLength(100),

                TextInput::make('nama_kegiatan')
                    ->label('Nama Kegiatan')
                    ->required()
                    ->maxLength(100),

                DatePicker::make('tanggal')
                    ->label('Tanggal')
                    ->required(),

                TimePicker::make('waktu_mulai')
                    ->label('Waktu Mulai')
                    ->required(),

                TimePicker::make('waktu_selesai')
                    ->label('Waktu Selesai')
                    ->required(),

                Select::make('status')
                    ->label('Status')
                    ->required()
                    ->options([
                        'pending' => 'Pending',
                        'approved' => 'Approved',
                    ])
                    ->default('pending'),

                TextInput::make('nomor_hp')
                    ->label('Nomor HP')
                    ->required()
                    ->tel()
                    ->maxLength(15),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nomor_ruangan')->label('Ruangan')->searchable(),
                TextColumn::make('nama_pemesan')->label('Pemesan')->searchable(),
                TextColumn::make('nama_kegiatan')->label('Kegiatan')->searchable(),
                TextColumn::make('tanggal')->label('Tanggal')->date(),
                TextColumn::make('waktu_mulai')->label('Mulai'),
                TextColumn::make('waktu_selesai')->label('Selesai'),
                BadgeColumn::make('status')
                    ->label('Status')
                    ->colors([
                        'primary' => 'pending',
                        'success' => 'approved',
                    ]),
                TextColumn::make('nomor_hp')->label('Nomor HP'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'approved' => 'Approved',
                    ])
                    ->label('Filter Status'),
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPemesanans::route('/'),
            'create' => Pages\CreatePemesanan::route('/create'),
            'edit' => Pages\EditPemesanan::route('/{record}/edit'),
        ];
    }
}
