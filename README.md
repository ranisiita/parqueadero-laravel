# Tarea - Desarrollo en Plataformas

**Estudiante:** Dana Bahamonde  
**Fecha:** 15 de Diciembre, 2025  
**Paralelo:** P9932

---

## Mis Decisiones de Diseño

### 1. Tabla

**Nombre de la tabla:** `vehiculos`

**Campos:**

| Campo | Tipo | ¿Obligatorio? |
|-------|------|---------------|
| id | INTEGER (autoincremental) | Sí |
| placa | VARCHAR(10) | Sí |
| tipo | VARCHAR(20) | Sí |
| propietario | VARCHAR(100) | No |
| observaciones | TEXT | No |
| created_at | TIMESTAMP | Sí (automático) |
| updated_at | TIMESTAMP | Sí (automático) |
| deleted_at | TIMESTAMP | No |

### 2. Tipos de vehículo

- Automóvil
- Motocicleta
- Camioneta

### 3. ¿Se puede eliminar registros?

**Respuesta:** Sí, con borrado lógico (soft deletes)

**Razón:** Los registros se marcan como eliminados pero se conservan en la base de datos para mantener historial y evitar pérdida de información.

---

## Repositorio

**GitHub:** [https://github.com/ranisiita/parqueadero-laravel](https://github.com/ranisiita/parqueadero-laravel)

---