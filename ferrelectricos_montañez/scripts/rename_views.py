from pathlib import Path
base = Path('app/views')
modules = [p.name for p in base.iterdir() if p.is_dir()]
renamed = []
for mod in modules:
    old = base / mod / 'index.php'
    if old.exists():
        new = base / mod / f'{mod}_index.php'
        old.rename(new)
        renamed.append((mod, new.name))
print('renamed', renamed)
ctrl_dir = Path('app/controllers')
for ctrl in ctrl_dir.glob('*.php'):
    text = ctrl.read_text(encoding='utf-8')
    changed = False
    for mod in modules:
        oldpath = f"require_once __DIR__ . '/../views/{mod}/index.php';"
        newpath = f"require_once __DIR__ . '/../views/{mod}/{mod}_index.php';"
        if oldpath in text:
            text = text.replace(oldpath, newpath)
            changed = True
    if changed:
        ctrl.write_text(text, encoding='utf-8')
        print('updated', ctrl)
